class Casa:
    def __init__(self, endereco):
        self.endereco = endereco

    def mostrar_detalhes (self):
    print(f"endereco: {self.endereco}")

minha_casa = Casa("Pedro de Medeiros, 941")
minha_casa.mostrar_detalhes()