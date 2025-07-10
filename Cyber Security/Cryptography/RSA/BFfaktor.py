n =  14770702540164931167966225994273045612717359022238506559876045073513439940334070898701198292324555148899969244149517750481898867782086191375597991135681974
def factorize_trial(n):
    limit = 10**6  # batas maksimal faktor kecil
    for i in range(2, limit):
        if n % i == 0:
            return i, n // i
    return None, None

p, q = factorize_trial(n)
print(f"faktorisasi: \np = {p}\nq = {q}")

from Crypto.Util.number import long_to_bytes
e = 65537
c = 11926566054023809928785461602324003015964189220618846183850201249000526556726005755627705323490426760816753337144684059080430374002508744438310570478129909
T = (p - 1) * (q - 1)
d = pow(e, -1, T)
m = pow(c, d, n)

plaintext = long_to_bytes(m)
print(f"\n[+] Flag / Plaintext: {plaintext}")