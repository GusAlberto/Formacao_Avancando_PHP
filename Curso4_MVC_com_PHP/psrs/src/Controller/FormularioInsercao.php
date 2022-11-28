<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;


class FormularioInsercao implements RequestHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */ 
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        //var_dump($this->entityManager)
        $html = 'Teste';
        return new Response(200, [], $html);
    }
}