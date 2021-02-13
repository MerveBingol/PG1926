class Okul():
    tip = "egitimyeri"

    def __init__(self, adi, turu, ogretmen_sayisi, ögrenci_sayisi, sinif_sayisi):
        self.adi = adi
        self.turu = turu
        self.ogretmen_sayisi = ogretmen_sayisi
        self.ögrenci_sayisi = ögrenci_sayisi
        self.sinif_sayisi = sinif_sayisi

O1 = Okul("Aşkale ", "İlkÖğretim Okulu", 20, 450, 25)
O2 = Okul("Gaziantep", "Fen Lisesi", 28, 650, 40)
O3 = Okul("Malatya İnönü", "Üniversitesi", 35, 1450, 60)

Okullar = [O1, O2, O3]

for okul in Okullar:
    print(okul.adi, okul.turu, okul.ogretmen_sayisi, okul.ögrenci_sayisi, okul.sinif_sayisi)
