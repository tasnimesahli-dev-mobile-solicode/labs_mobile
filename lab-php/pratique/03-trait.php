<?php
declare(strict_types=1);

trait HasCreationDate
{
    private DateTimeImmutable $createdAt;

    protected function initializeCreationDate(): void
    {
        $this->createdAt = new DateTimeImmutable();
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}

final class Article
{
    use HasCreationDate;

    public function __construct(public string $title)
    {
        $this->initializeCreationDate();
    }
}

final class Ticket
{
    use HasCreationDate;

    public function __construct(public string $subject)
    {
        $this->initializeCreationDate();
    }
}

$article = new Article('Introduction à PHP');
$ticket = new Ticket('Question sur les exceptions');

echo $article->title . ' créé le ' . $article->getCreatedAt()->format('Y-m-d H:i:s') . "\n";
echo $ticket->subject . ' créé le ' . $ticket->getCreatedAt()->format('Y-m-d H:i:s') . "\n";