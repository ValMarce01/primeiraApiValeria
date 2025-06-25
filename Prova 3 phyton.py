import tkinter as tk
import PIL as Pillow

class ImageWindow:
    def __init__(self, root):
        self.root = root
        self.root.title("Exibidor de Imagens")
        self.root.geometry("800x600")
        self.root.configure(bg="lightblue")
        self.images_paths = [
            "imagem01.jpg", "imagem02.jpg","imagem03.jpg"
        ]
        self.phrases = [ "Esta é a primeira imagem!", "Aqui está a segunda imagem!", "Veja a terceiraimagem!" ]
        button_frame = tk.Frame(root, bg="lightblue")
        button_frame.pack(side=tk.TOP, pady=10)

        self.buttons = []
        colors = ["red", "green", "blue"]
        for i in range(3):
            button = tk.Button(button_frame, text=f"Imagem {i+1}", bg=colors[i],command=lambda idx=i: self.show_image(idx))
            button.pack(side=tk.LEFT, padx=5)
            self.buttons.append(button)


        self.image_label = tk.Label(root, bg="gray")
        self.image_label.pack(fill=tk.BOTH, expand=True)

        self.text_label = tk.Label(root, text="Selecione uma imagem", font=("Arial", 14),bg="lightblue")
        self.text_label.pack(pady=10)

        def show_image(self, index):
             self.index = index
        image = Image.open(self.image_paths[index]) # Abre a imagem
        image = image.resize((600, 400)),
        photo = ImageTk.PhotoImage(image) # Converte a imagem para o formato do Tkinter
        # Atualiza os componentes gráficos
        self.image_label.config(image=photo)
        self.image_label.image = photo # Mantém referência da imagem
        self.text_label.config(text=self.phrases[index]) # Atualiza a frase correspondente
        Exception as e:
        print(f"Erro ao carregar imagem: {e}")
        self.text_label.config(text="Erro ao carregar a imagem!")
