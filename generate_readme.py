import os
from pathlib import Path

# Configuration for file types
STATEMENT_FILES = [".md"]
SOLUTION_FILES = {
    "Java": ".java",
    "Python": ".py",
    "JavaScript": ".js",
    "PHP": ".php"
}

ROOT = Path(__file__).parent
README = ROOT / "README.md"


def get_problem_dirs():
    return [d for d in ROOT.iterdir() if d.is_dir() and d.name[0].isdigit()]


def get_file_by_ext(files, ext):
    for f in files:
        if f.suffix == ext:
            return f
    return None


def generate_index():
    lines = [
        "# LeetCode Problems Index\n",
        "This index provides links to each LeetCode problem in this repository, including the problem statement and solutions in Java, Python, JavaScript, and PHP.\n",
        "---\n",
        "## Problems\n"
    ]

    for problem_dir in sorted(get_problem_dirs()):
        files = list(problem_dir.iterdir())
        # Problem title from folder name
        title = problem_dir.name
        # Try to find a markdown statement file
        statement = next((f for f in files if f.suffix == ".md"), None)
        # Try to get a readable title from the statement file
        display_title = title
        if statement:
            with open(statement, encoding="utf-8") as f:
                first_line = f.readline().strip()
                if first_line and first_line.startswith("#"):
                    display_title = first_line.lstrip("# ")
        # Compose line (single line for all links, no 'Back to Index' in statements)
        line = f"### {title} {display_title if display_title != title else ''}".strip() + "\n\n- "
        if statement:
            line += f"[Problem Statement]({problem_dir.name}/{statement.name})"
        else:
            line += "No markdown statement file found"
        # Add solutions in single line
        for lang, ext in SOLUTION_FILES.items():
            sol = get_file_by_ext(files, ext)
            if sol:
                line += f" | [{lang}]({problem_dir.name}/{sol.name})"
        lines.append(line + "\n")

    lines.append("---\n\n_This index is auto-generated for easy navigation._\n")
    with open(README, "w", encoding="utf-8") as f:
        f.writelines(lines)


if __name__ == "__main__":
    generate_index()
