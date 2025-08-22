from typing import List

class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
        map = {}
        
        for i, num in enumerate(nums):
            complement = target - num
            if complement in map:
                return [map[complement], i]
            map[num] = i
            
def printAnswer(nums, target, answer):
    # Convert nums to comma-separated string
    nums_csv = ", ".join(str(num) for num in nums)
    print(f"Nums : [{nums_csv}]")
    
    print(f"Target : {target}")
    
    # Convert answer to comma-separated string
    answer_csv = ", ".join(str(a) for a in answer)
    print(f"Answer : [{answer_csv}]")
    
    print("\n-----------------------\n")
            
solution = Solution()

nums = [2,7,11,15]
target = 9
answer = solution.twoSum(nums, target)
printAnswer(nums, target, answer)

nums = [3,2,4]
target = 6
answer = solution.twoSum(nums, target)
printAnswer(nums, target, answer)

nums = [3,3]
target = 6
answer = solution.twoSum(nums, target)
printAnswer(nums, target, answer)

            