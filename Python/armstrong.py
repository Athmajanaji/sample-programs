a=int(input("Enter a random number"))
sum=0
t=a
while(a>0):
    r=a%10
    sum=sum+(r*r*r)
    a=a//10
if(t==sum):
    print("The Number is Armstrong")
else:
    print("The Number is not Armstrong")