
class MaxSubArrayIndex {

    public int maxSubArray(int[] nums) {
       int global_max = nums[0];
       int current_max = nums[0];
       int start = 0;
       int end = 0;
       int temp_start = 0;

       for(int i=1; i<nums.length; i++){
            if(nums[i] > current_max + nums[i]){
                current_max = nums[i];
                temp_start = i;
            }else{
                current_max += nums[i];
            }

            if(current_max > global_max){
                global_max = current_max;
                start = temp_start;
                end = i;
            }
       }

       for(int i=start; i<=end; i++){
            System.out.println("nums["+i+"] = "+nums[i]);
       } 

       return global_max;
    }

    public static void main(String[] args) {
        MaxSubArrayIndex ob = new MaxSubArrayIndex();

        int nums[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};

        int answer = ob.maxSubArray(nums);

        System.out.println("Answer " + answer);
    }
}
