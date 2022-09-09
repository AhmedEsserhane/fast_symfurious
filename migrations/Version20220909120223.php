<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220909120223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course_users (course_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_FD28A201591CC992 (course_id), INDEX IDX_FD28A20167B3B43D (users_id), PRIMARY KEY(course_id, users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course_users ADD CONSTRAINT FK_FD28A201591CC992 FOREIGN KEY (course_id) REFERENCES course (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course_users ADD CONSTRAINT FK_FD28A20167B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD classement INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course_users DROP FOREIGN KEY FK_FD28A201591CC992');
        $this->addSql('ALTER TABLE course_users DROP FOREIGN KEY FK_FD28A20167B3B43D');
        $this->addSql('DROP TABLE course_users');
        $this->addSql('ALTER TABLE course DROP classement');
    }
}
