from django.shortcuts import render, redirect
from django.db import transaction
from django.views import generic
from django.views.generic.edit import FormView
from django.urls import reverse_lazy
from BiblioLivros.forms import LivroFormulario, AutorFormulario, AutorLivroFormSet
from BiblioLivros.models import Livros, Autores
from django.urls import reverse


# CLASSE GENÉRICA PARA A LISTAGEM DOS LIVROS
class LivroListarView(generic.ListView):
	model = Livros
	template_name = 'Livros/listar_livros.html'
	paginate_by = 12
	
# CLASSE GENÉRICA PARA A CRIAÇÃO DOS LIVROS
class LivroCriarView(generic.CreateView):
	model = Livros
	form_class = LivroFormulario
	template_name = 'Livros/criar_livros.html'
	success_url = '/listar_livro/'
	
	#AQUI ESTÁ PEGANDO O INLINE_FORMSET CRIADO E INSERINDO COMO UM CONTEXTO
	def get_context_data(self, **kwargs):
		data = super(LivroCriarView, self).get_context_data(**kwargs)
		if self.request.POST:
			data['autor_livro'] = AutorLivroFormSet(self.request.POST)
		else:
			data['autor_livro'] = AutorLivroFormSet()
		return data

	# AQUI ESTÁ VALIDANDO O FORMULÁRIO
	def form_valid(self, form):
		context = self.get_context_data()
		autor_livro = context['autor_livro']
		with transaction.atomic():
			form.instance.created_by = self.request.user
			form.instance.updated_by = self.request.user
			self.object = form.save()
		if autor_livro.is_valid():
			autor_livro.instance = self.object
			autor_livro.save()

		return super(LivroCriarView, self).form_valid(form)

	def get_success_url(self):
		return reverse('listar_livro_info')

class LivroEditarView(generic.UpdateView):
	model = Livros
	template_name = 'Livros/editar_livros.html'
	form_class = LivroFormulario
	success_url = '/listar_livro/'

class LivroDeletarView(generic.DeleteView):
	model = Livros
	template_name = 'Livros/livros_confirm_delete.html'
	form_class = LivroFormulario
	success_url = '/listar_livro/'


# AUTORES!!

class AutorListarView(generic.ListView):
	model = Autores
	template_name = 'Autores/listar_autores.html'
	paginate_by = 12


class AutorCriarView(generic.CreateView):
	model = Livros
	form_class = AutorFormulario
	template_name = 'Autores/criar_autores.html'
	success_url = '/listar_autor/'
	
class AutorEditarView(generic.UpdateView):
	model = Livros
	template_name = 'Livros/editar_livros.html'
	form_class = LivroFormulario
	success_url = '/listar_autor/'

class AutorDeletarView(generic.DeleteView):
	model = Livros
	template_name = 'Autores/autor_confirm_delete.html'
	form_class = LivroFormulario
	success_url = '/listar_autor/'