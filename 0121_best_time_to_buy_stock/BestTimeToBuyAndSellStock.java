
import java.util.Arrays;

class BestTimeToBuyAndSellStock {

    public int maxProfit(int[] prices) {
        int min_price = Integer.MAX_VALUE;
        int max_profit = 0;

        for (int price : prices) {
            if (price < min_price) {
                min_price = price;
            }

            max_profit = Math.max(max_profit, price - min_price);
        }

        return max_profit;
    }

    public static void main(String args[]) {
        BestTimeToBuyAndSellStock ob = new BestTimeToBuyAndSellStock();
        int[] prices = {7, 1, 5, 3, 6};

        int answer = ob.maxProfit(prices);

        System.out.println("Prices : " + Arrays.toString(prices));
        System.out.println("Answer : " + answer);
    }
}
