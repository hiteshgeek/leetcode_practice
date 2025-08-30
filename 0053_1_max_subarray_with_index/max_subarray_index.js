
/**
 * @param {number[]} nums
 * @return {number}
 */
var maxSubArray = function (nums) {
    let current_max = global_max = nums[0];
    let start = end = temp_start = 0;

    for (let i = 1; i < nums.length; i++) {
        if (nums[i] > current_max + nums[i]) {
            current_max = nums[i];
            temp_start = i;
        } else {
            current_max += nums[i];
        }

        if (current_max > global_max) {
            global_max = current_max;

            start = temp_start;
            end = i
        }
    }

    for (let i = start; i <= end; i++) {
        console.log(`nums[${i}] = ${nums[i]}`);
    }

    return global_max;
};

let nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];

let answer = maxSubArray(nums);

console.log(answer);