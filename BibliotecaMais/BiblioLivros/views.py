from django.shortcuts import render, redirect
from django.views import generic
from django.urls import reverse_lazy
from BiblioLivros.forms import LivroFormulario
from BiblioLivros.models import Livros

class LivroListarView(generic.ListView):
	model = Livros
	template_name = 'mostrar.html'
	paginate_by = 10
	
class LivroCriarView(generic.CreateView):
	model = Livros
	form_class = LivroFormulario
	template_name = 'criar.html'
	success_url = '/listar/'



class LivroEditarView(generic.UpdateView):
	model = Livros
	template_name = 'editar.html'
	form_class = LivroFormulario
	success_url = '/listar/'


class LivroDeletarView(generic.DeleteView):
	model = Livros
	template_name = 'BiblioLivros/livros_confirm_delete.html'
	form_class = LivroFormulario
	success_url = '/listar/'