# Generated by Django 2.2.7 on 2020-01-31 14:37

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('BiblioLivros', '0003_auto_20200125_1344'),
    ]

    operations = [
        migrations.AlterField(
            model_name='autores',
            name='sexo_autor',
            field=models.CharField(choices=[('F', 'Feminino'), ('M', 'Masculino')], max_length=1),
        ),
        migrations.AlterField(
            model_name='livros',
            name='publicacao_livro',
            field=models.DecimalField(decimal_places=0, max_digits=4),
        ),
    ]
