a=int(input("Enter A Number"))
s=0
t=a
while(a!=0):
    r=a%10
    s=s*10+r
    a=a//10

print("reverse of",t,"=",s)
