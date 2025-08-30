
/**
 * @param {number[]} nums
 * @return {number}
 */
var maxSubArray = function (nums) {
    let global_max = current_max = nums[0];

    for (let i = 1; i < nums.length; i++) {
        current_max = Math.max(nums[i], current_max + nums[i]);

        global_max = Math.max(current_max, global_max);
    }

    return global_max;
};

let nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];

let answer = maxSubArray(nums);

console.log(answer);