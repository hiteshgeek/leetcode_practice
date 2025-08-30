from typing import List

class MaxSubArray:
      def maxSubArray(self, nums: List[int]) -> int:
            global_max = current_max = nums[0]
            start = end = temp_start = 0

            for i in range(1, len(nums)):
                  if nums[i] > current_max + nums[i]:
                        temp_start = i
                        current_max = nums[i]
                  else:
                        current_max += nums[i]
            
                  if current_max > global_max:
                        global_max = current_max
                        start = temp_start
                        end = i

            for i in range(start, end+1):
                  print(f"nums[{i}] = {nums[i]}")

            return global_max


nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4]
ob = MaxSubArray()

print(nums)
answer = ob.maxSubArray(nums)
print(f"Max sum : ", answer)