/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
var findMaxAverage = function (nums, k) {
    let first_array = nums.slice(0, k);
    let window_sum = first_array.reduce((a, c) => a + c, 0);

    let max_sum = window_sum;
    let start = 0;

    for (let i = k; i < nums.length; i++) {
        window_sum += nums[i] - nums[i - k];

        if (window_sum > max_sum) {
            max_sum = window_sum;
            start = i - k + 1;
        }
    }

    for (let i = start; i < start + k; i++) {
        console.log(`nums[${i}] = ${nums[i]}`)
    }

    return max_sum / k;
};

let nums = [1, 12, -5, -6, 50, 3];
let k = 4;

console.log(nums);
let answer = findMaxAverage(nums, k);

console.log(`Answer = ${answer}`);