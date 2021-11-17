a=input("Enter A String :")
a=a.split(" ")
for i in a:
    occur=a.count(i)
    if(occur== 1):
        print(i,"occur ",a.count(i)," times")
    else:
        print(i,"occur ",a.count(i)," times")
