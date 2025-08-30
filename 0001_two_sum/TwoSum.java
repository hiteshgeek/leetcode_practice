import java.util.Arrays;
import java.util.HashMap;

class TwoSum {
    public int[] twoSum(int[] nums, int target) {
        HashMap<Integer, Integer> map = new HashMap<>();

        for(int i=0; i<nums.length; i++){
            int complement = target - nums[i];

            if(map.containsKey(complement)){
                return new int[]{map.get(complement), i};
            }

            map.put(nums[i], i);
        }

        return new int[]{-1, -1};
    }

    public static void printAnswer(int[] nums, int target, int[] answer) {
        System.out.println("Nums : " + Arrays.toString(nums));
        System.out.println("Target : " + target);
        System.out.println("Answer : " + Arrays.toString(answer));
        System.out.println("\n-----------------------\n");
    }

    public static void main(String[] args) {
        TwoSum ob = new TwoSum();

        int[] nums1 = {2, 7, 11, 15};
        int target1 = 9;
        int[] answer1 = ob.twoSum(nums1, target1);
        printAnswer(nums1, target1, answer1);

        int[] nums2 = {3, 2, 4};
        int target2 = 6;
        int[] answer2 = ob.twoSum(nums2, target2);
        printAnswer(nums2, target2, answer2);

        int[] nums3 = {3, 3};
        int target3 = 6;
        int[] answer3 = ob.twoSum(nums3, target3);
        printAnswer(nums3, target3, answer3);
    }
}