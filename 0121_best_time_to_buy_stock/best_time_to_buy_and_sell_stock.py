from typing import List

class BestTimeToBuyAndSellStock(object):
    def maxProfit(self, prices: List[int]) -> int:
        min_price = float('inf')
        max_profit = 0
        buy_day = sell_day = -1
        
        
        for i in range(0, len(prices)):
            if prices[i] < min_price:
                buy_day = i
                sell_day = -1
                min_price = prices[i]
                
            if prices[i] - min_price > max_profit:
                max_profit = prices[i] - min_price       
                sell_day = i
                
        print(f"Buy at {buy_day} : {prices[buy_day]}")        
        print(f"Sell at {sell_day} : {prices[sell_day]}")        
                
        return int(max_profit) 
        
        
ob = BestTimeToBuyAndSellStock()        

nums = [7, 1, 5, 3, 6, 4]
print(nums)
answer = ob.maxProfit(nums)
print(f"Answer is {answer}")