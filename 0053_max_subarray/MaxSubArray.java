
class MaxSubArray {

    public int maxSubArray(int[] nums) {
        int global_max = nums[0];
        int current_max = nums[0];

        for (int i = 1; i < nums.length; i++) {
            current_max = Math.max(nums[i], current_max + nums[i]);
            global_max = Math.max(current_max, global_max);
        }

        return global_max;
    }

    public static void main(String[] args) {
        MaxSubArray ob = new MaxSubArray();

        int nums[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};

        int answer = ob.maxSubArray(nums);

        System.out.println("Answer " + answer);
    }
}
