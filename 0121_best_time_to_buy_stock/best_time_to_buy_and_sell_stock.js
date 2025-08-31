/**
 * @param {number[]} prices
 * @return {number}
 */
var maxProfit = function (prices) {
    let min_price = Number.MAX_SAFE_INTEGER;
    let max_profit = 0;


    for (let price of prices) {
        min_price = Math.min(price, min_price)

        max_profit = Math.max(max_profit, price - min_price)
    }

    return max_profit
};

prices = [7, 1, 5, 3, 6, 4]
console.log(prices)
answer = maxProfit(prices)
console.log(`Answer is ${answer}`)