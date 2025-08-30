from typing import List


class MaxAverageSubArrayFixedLength:
    def findMaxAverage(self, nums: List[int], k: int) -> float:
        n = len(nums)
        max_sum = window_sum = sum(nums[:k])
        start = 0

        for i in range(k, n):
            window_sum += nums[i] - nums[i-k]

            if window_sum > max_sum:
                  max_sum = window_sum
                  start = i - k + 1
        
        print(nums[start:start+k])
                  
        return max_sum/k   


solution = MaxAverageSubArrayFixedLength()

nums = [1, 12, -5, -6, 50, 3]
k = 4

print(nums)
answer = solution.findMaxAverage(nums, k)

print(f"Answer : {answer}");