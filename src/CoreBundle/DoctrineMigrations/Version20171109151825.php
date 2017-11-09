<?php

namespace Riverway\Cms\CoreBundle\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171109151825 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, display INT NOT NULL, creator VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_23A0E66841CB122 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slide_element_parameters (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) DEFAULT NULL, text_color VARCHAR(255) DEFAULT NULL, margin_left VARCHAR(255) NOT NULL, width VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slide_button_element_parameters (id INT NOT NULL, bg_color VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slide (id INT AUTO_INCREMENT NOT NULL, header_id INT DEFAULT NULL, sub_header_id INT DEFAULT NULL, description_id INT DEFAULT NULL, button_id INT DEFAULT NULL, slider_id INT DEFAULT NULL, text_align VARCHAR(255) NOT NULL, vertical_align VARCHAR(255) NOT NULL, width INT NOT NULL, margin_left INT NOT NULL, image_url VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_72EFEE622EF91FD8 (header_id), UNIQUE INDEX UNIQ_72EFEE623CF45966 (sub_header_id), UNIQUE INDEX UNIQ_72EFEE62D9F966B (description_id), UNIQUE INDEX UNIQ_72EFEE62A123E519 (button_id), INDEX IDX_23A0E663A432111 (slider_id), INDEX IDX_23A0E663A432112 (header_id), INDEX IDX_23A0E663A432113 (sub_header_id), INDEX IDX_23A0E663A432114 (description_id), INDEX IDX_23A0E663A432115 (button_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slide_button_element_parameters ADD CONSTRAINT FK_C277A864BF396750 FOREIGN KEY (id) REFERENCES slide_element_parameters (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE slide ADD CONSTRAINT FK_72EFEE622EF91FD8 FOREIGN KEY (header_id) REFERENCES slide_element_parameters (id)');
        $this->addSql('ALTER TABLE slide ADD CONSTRAINT FK_72EFEE623CF45966 FOREIGN KEY (sub_header_id) REFERENCES slide_element_parameters (id)');
        $this->addSql('ALTER TABLE slide ADD CONSTRAINT FK_72EFEE62D9F966B FOREIGN KEY (description_id) REFERENCES slide_element_parameters (id)');
        $this->addSql('ALTER TABLE slide ADD CONSTRAINT FK_72EFEE62A123E519 FOREIGN KEY (button_id) REFERENCES slide_button_element_parameters (id)');
        $this->addSql('ALTER TABLE slide ADD CONSTRAINT FK_72EFEE622CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id)');
        $this->addSql('ALTER TABLE article ADD slider_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E662CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id)');
        $this->addSql('CREATE INDEX IDX_23A0E662CCC9638 ON article (slider_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E662CCC9638');
        $this->addSql('ALTER TABLE slide DROP FOREIGN KEY FK_72EFEE622CCC9638');
        $this->addSql('ALTER TABLE slide_button_element_parameters DROP FOREIGN KEY FK_C277A864BF396750');
        $this->addSql('ALTER TABLE slide DROP FOREIGN KEY FK_72EFEE622EF91FD8');
        $this->addSql('ALTER TABLE slide DROP FOREIGN KEY FK_72EFEE623CF45966');
        $this->addSql('ALTER TABLE slide DROP FOREIGN KEY FK_72EFEE62D9F966B');
        $this->addSql('ALTER TABLE slide DROP FOREIGN KEY FK_72EFEE62A123E519');
        $this->addSql('DROP TABLE slider');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE slide_element_parameters');
        $this->addSql('DROP TABLE slide_button_element_parameters');
        $this->addSql('DROP TABLE slide');
        $this->addSql('DROP INDEX IDX_23A0E662CCC9638 ON article');
        $this->addSql('ALTER TABLE article DROP slider_id');
    }
}
