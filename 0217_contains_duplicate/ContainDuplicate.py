class ContainsDuplicate(object):
    def containsDuplicate(self, nums):
        map = {}
        
        for i, num in enumerate(nums):
            if num in map:
                return True
            map[num] = i
        return False

ob = ContainsDuplicate()

nums = [1, 2, 3, 1]

answer = ob.containsDuplicate(nums)

print(f"Answer {answer}")