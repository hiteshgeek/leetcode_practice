class Solution(object):
    def containsDuplicate(self, nums):
        map = {}
        
        for i, num in enumerate(nums):
            if num in map:
                return True
            map[num] = i
        return False