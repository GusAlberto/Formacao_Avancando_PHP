<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = ( new EntityManagerCreator() )
            ->getEntityManager();
    }

    public function  processaRequisicao(): void
    {   
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            htmlspecialchars('UTF-8')
        );

        // Pegar dados do formulário
        // Montar modelo Curso
        // Inserir no banco
        $curso = new Curso();
        $curso->setDescricao($descricao);
        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        // Mensagem(alert) a ser enviada para usuário pelo lado do cliente (front-end)
        // echo "Curso $descricao salvo com sucesso!";
        header('Location: /listar-cursos', true, 302);
    }
}