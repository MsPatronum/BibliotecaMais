from django import forms
from BiblioLivros.models import Livros, Categoria

class LivrosFormulario(forms.ModelForm):
	class Meta:
		model = Livros
		fields = ['titulo_livro','subtitulo_livro','sinopse_livro','avaliacao_livro','isbn_livro','publicacao_livro','editora_cod_editora','categoria_cod_categoria',]