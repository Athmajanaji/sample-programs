d={'Shah':21,'Aenjith':22,'Gokul':23}
print("Ascending Order")
print(sorted(d.items()))
print("Descending Order")
print(sorted(d.items(),key=lambda x:x[1]))
