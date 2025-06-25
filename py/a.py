class Carro:
#atributo 
    modelo = "pedro"
    ano = "2022"

#metodo
    def imprimir_modelo(self):
        print(f"O modelo do carro é: {self.modelo}, ano: {self.ano}")

    #chamada do método diretamente da classe 
Carro().imprimir_modelo()