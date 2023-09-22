import java.io.IOException;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) throws IOException {
        Scanner num = new Scanner(System.in);

        int n1 = num.nextInt();
        int n2 = num.nextInt();
        int soma = n1 + n2;
        System.out.println("SOMA = " + soma);
}
}