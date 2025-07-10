N = 3233
i = 17
E = [805, 1212, 1500, 2315, 1812, 100]
invers = []
for e in E:
    proses = pow(e, i, N)
    invers.append(proses)

print(invers)


