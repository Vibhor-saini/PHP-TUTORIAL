import java.util.*;
class webkul18{
    public static void main(String[] args) {
      
    Scanner sc = new Scanner(System.in);
   int n = sc.nextInt();

   if(n==1||n%2==0){
    return;
   }
   for(int i=1;i<=n;i++){
    for(int j=1;j<=n-i;j++){
      System.out.print(" ");
    }
    for(int j=1;j<=i;j++){
      System.out.print("*");
    }
   

    if(i==1||i==n){
    for(int j=1;j<=n;j++){
      System.out.print("e");
    }
  }else{
    for(int j=1;j<=n;j++){
      System.out.print(" ");
    }
  }
  for(int j=1;j<=i;j++){
    System.out.print("*");
  }
    System.out.println();
   }
}
}