
class MaxAverageSubArrayFixedLength {

    public double findMaxAverage(int[] nums, int k) {
        int max_sum;
        int window_sum = 0;
        int start = 0;

        for (int i = 0; i < k; i++) {
            window_sum += nums[i];
        }

        max_sum = window_sum;

        for (int i = k; i < nums.length; i++) {
            window_sum += nums[i] - nums[i - k];

            if (window_sum > max_sum) {
                max_sum = window_sum;
                start = i - k + 1;
            }
        }

        for (int i = start; i < start + k; i++) {
            System.out.println("nums[" + i + "] = " + nums[i]);
        }

        return (double) max_sum / k;
    }

    public static void main(String[] args) {

        MaxAverageSubArrayFixedLength ob = new MaxAverageSubArrayFixedLength();

        int nums[] = {1, 12, -5, -6, 50, 3};
        int k = 4;

        System.out.println("Answer : " + ob.findMaxAverage(nums, k));
    }

}
