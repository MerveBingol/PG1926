def control(str):
  i = 0
  for ch in str:
    if ch == '@':
      i = i + 1
 
  if i == 1:
    return True
  else:
    return False
 
mailadress=input('Mail adresinizi girin: ')
if(control(mailadress)==True):
      print('Giriş yapabilirsiniz.')
else:
      print('Lütfen mail adresinizi kontrol ediniz.')
