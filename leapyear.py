a=int(input("Enter first number"))
if a%4==0:
    if a%100==0:
        if a%400==0:
            print(a," leap year")
        else:
            print("not a leap year")
    else:
       print("not a leap year")
else:
    print("not a leap year")
