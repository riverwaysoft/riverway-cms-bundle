<?php

namespace Riverway\Cms\CoreBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171107180347 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE article ADD meta_description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD meta_keywords VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD meta_referrer VARCHAR(255)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE article DROP COLUMN meta_description');
        $this->addSql('ALTER TABLE article DROP COLUMN meta_keywords');
        $this->addSql('ALTER TABLE article DROP COLUMN meta_referrer');
    }
}
