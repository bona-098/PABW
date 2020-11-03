"""jumlah total 938
psb 223
spg 230
rpk 120
sbj 150
btm 100
rr 55
bns 60"""
# yg usia mandiri insya Allah 50-60% dari jumlah itu
import math
pasarbaru = 223
sepinggan = 230
rapak = 120
samboja = 150
batam = 100
ringroad = 55
kebunsayur = 60
jumlah = [223, 230, 120, 150, 100, 55, 60]
jumlahunik = []
namaDesa = ['pasarbaru\t', 'sepinggan\t', 'rapak\t', 'samboja\t', 'batam\t', 'ringroad\t', 'kebunsayur\t']
prosentase = []
bulatbawah = []
bulatatas = []
bagiatas = []
bagi = []
bagibawah = []
uang = 2000000
for k in range(len(jumlah)):
    # jumlahunik.append(round(jumlah[k] / 2))
    jumlahunik.append(math.ceil(jumlah[k] / 2))
for i in range(len(jumlahunik)):
    bulatbawah.append(math.floor((jumlahunik[i] / sum(jumlahunik) ) * 100)) 
    prosentase.append((jumlahunik[i] / sum(jumlahunik) ) * 100)
    bulatatas.append(math.ceil((jumlahunik[i] / sum(jumlahunik) ) * 100))
for j in range(len(jumlahunik)):
    bagi.append((uang / 100) * prosentase[j])
    bagiatas.append((uang / 100) * bulatatas[j])
    bagibawah.append((uang / 100) * bulatbawah[j])

print('\n\n')
print('Jumlah muda/mudi per desa')
for j in range(len(jumlah)):
    print('muda/mudi ', namaDesa[j], '=', jumlah[j])
print('jumlah = ', sum(jumlah))

print('\n\n')
print('Jumlah Muda/mudi usia nikah')
for i in range(len(jumlahunik)):
    print('usia nikah ', namaDesa[i], '=', jumlahunik[i])
print('jumlah = ', sum(jumlahunik))

print('\n\n')
for k in range(len(bagi)):
    print("bagian desa ", namaDesa[k], ' = Rp.', bagiatas[k])
print('jumlah = ', sum(bagiatas))

print('\n\n')