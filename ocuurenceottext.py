a=input("Enter A String :")
a=a.split(" ")
b=[]
for i in a:
    if i not in b:
        b.append(i)
for i in b:
        print(i,"occur ",a.count(i)," times")
