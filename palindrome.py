a=int(input("Enter A Number"))
s=0
t=a
while(a!=0):
    r=a%10
    s=s*10+r
    a=a//10

if(t==s):
    print(t,"is palindrome")
else:
    print("Not Palindrome")
