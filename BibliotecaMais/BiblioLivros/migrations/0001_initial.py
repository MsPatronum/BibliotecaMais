# Generated by Django 2.2.7 on 2019-11-26 14:57

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Categoria',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome_categoria', models.CharField(max_length=45)),
            ],
            options={
                'db_table': 'categoria',
            },
        ),
        migrations.CreateModel(
            name='Editora',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome_editora', models.CharField(max_length=45)),
            ],
            options={
                'db_table': 'editora',
            },
        ),
        migrations.CreateModel(
            name='Livros',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo_livro', models.CharField(max_length=45)),
                ('subtitulo_livro', models.CharField(blank=True, max_length=45, null=True)),
                ('capa_livro', models.CharField(max_length=250)),
                ('sinopse_livro', models.TextField(max_length=1000)),
                ('avaliacao_livro', models.DecimalField(decimal_places=2, max_digits=2)),
                ('isbn_livro', models.IntegerField(max_length=45)),
                ('publicacao_livro', models.DateField()),
                ('categoria_cod_categoria', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='BiblioLivros.Categoria')),
                ('editora_cod_editora', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='BiblioLivros.Editora')),
            ],
            options={
                'db_table': 'Livros',
            },
        ),
    ]