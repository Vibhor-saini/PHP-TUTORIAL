import java.util.*;
class webku14{
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();

        for(int i=1;i<=n/2+1;i++){

            if(i==n/2+1){
                System.out.print("*");
            for(int j=1;j<=n/2-1;j++){
                System.out.print(" ");
            } 
            System.out.print("*");
            for(int j=1;j<=n/2-1;j++){
                System.out.print(" ");
            }
            System.out.print("*");
            System.out.println();
        }else{
            System.out.print("*");
            for(int j=1;j<=n-2;j++){
                System.out.print(" ");
            }
             System.out.print("*");
             System.out.println();
            
        }
    }

        for(int i=1;i<=n/2;i++){
           if(i==n/2){
            System.out.print("*");
            for(int j=1;j<=n-2;j++){
                System.out.print(" ");
            }
            System.out.print("*");
           }
           
           else{
            System.out.print("*");
            for(int j=1;j<=n/2-i-1;j++){
                System.out.print(" ");
            }
            System.out.print("*");
            for(int j=1;j<=2*i-1;j++){
                System.out.print(" ");
            }
            System.out.print("*");
            for(int j=1;j<=n/2-i-1;j++){
                System.out.print(" ");
            }
            System.out.print("*");
           }
           System.out.println();
        }
  
    }
  
}


