a=int(input("Enter a number"))
b=int(input("ENter a number"))
if(a<b):
    temp=a
else:
    temp=b
print(temp)
for i in range(1,temp+1):
    if (a%i==0) and (b%1==0):
        gcd=i

print("GCD of ",a,b," = ",gcd)
