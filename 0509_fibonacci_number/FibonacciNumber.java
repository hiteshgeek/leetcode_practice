
import java.util.HashMap;

class FibonacciNumber {

    private final HashMap<Integer, Integer> map = new HashMap<>();

    public int fib(int n) {
        if (n < 2) {
            return n;
        }

        if (map.containsKey(n)) {
            return map.get(n);
        }

        int result = fib(n - 1) + fib(n - 2);
        this.map.put(n, result);
        return result;
    }

    public static void main(String[] args) {
        FibonacciNumber ob = new FibonacciNumber();

        System.out.println("Answer = " + ob.fib(6));
    }
}
