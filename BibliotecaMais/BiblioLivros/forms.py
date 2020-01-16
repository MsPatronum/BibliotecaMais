from django import forms
from BiblioLivros.models import Livros, Categoria

class LivroFormulario(forms.ModelForm):

	class Meta:
		model = Livros
		fields = ['titulo_livro','subtitulo_livro','avaliacao_livro','isbn_livro','publicacao_livro','categoria_cod_categoria','editora_cod_editora',]


	def __init__(self, *args, **kwargs):
		super(LivroFormulario, self).__init__(*args, **kwargs)
		self.fields['categoria_cod_categoria'].queryset = Categoria.objects.all()
	
	