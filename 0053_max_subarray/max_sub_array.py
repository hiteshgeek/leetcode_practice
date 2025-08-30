from typing import List

class MaxSubArray:
    def maxSubArray(self, nums: List[int]) -> int:
            global_max = nums[0]
            current_max = nums[0]

            for i in range(1, len(nums)):
                  current_max = max(nums[i], current_max + nums[i])
                  global_max = max(current_max, global_max)  

            return global_max


nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4]
ob = MaxSubArray()

answer = ob.maxSubArray(nums)
print(f"Max sum : ", answer)