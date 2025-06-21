import random
import string

def generate_password(mode: str, length: int = 12) -> str:
    if mode == "1":
        chars = string.ascii_letters
    elif mode == "2":
        chars = string.ascii_letters + string.digits
    elif mode == "3":
        chars = string.ascii_letters + string.digits + "!@#$%^&*()_+-=[]{}<>"
    else:
        raise ValueError("Mode invalide")

    return ''.join(random.choice(chars) for _ in range(length))

if __name__ == '__main__':
    print("--- Générateur de mot de passe Archéo-IT ---")
    print("Choisissez le niveau de complexité :")
    print("1. Lettres uniquement")
    print("2. Lettres et chiffres")
    print("3. Lettres, chiffres et caractères spéciaux")

    choix = input("Votre choix : ")
    mot_de_passe = generate_password(choix)
    print("Mot de passe généré :", mot_de_passe)
