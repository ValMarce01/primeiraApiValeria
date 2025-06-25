class Casa: # Definindo uma classe
def __init__(self, endereco): # Método especial para inicializar atributos
self.endereco = endereco # 'self' refere-se ao objeto da classe
def mostrar_detalhes(self): # Método para mostrar detalhes da casa
print(f"Endereço: {self.endereco}") # Usando f-strings no print
# Criando um objeto
minha_casa = Casa("Rua das Flores, 123")
minha_casa.mostrar_detalhes() 
