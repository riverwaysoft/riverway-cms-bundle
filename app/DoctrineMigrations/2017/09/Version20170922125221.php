<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170922125221 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE oauth_token (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, client_id VARCHAR(255) NOT NULL, secret VARCHAR(255) NOT NULL, refresh_token VARCHAR(255) DEFAULT NULL, access_token VARCHAR(255) DEFAULT NULL, username VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_D8344B2A19EB6921 (client_id), UNIQUE INDEX UNIQ_D8344B2A5CA2E8E5 (secret), UNIQUE INDEX UNIQ_D8344B2AC74F2195 (refresh_token), UNIQUE INDEX UNIQ_D8344B2AB6A2DD68 (access_token), UNIQUE INDEX UNIQ_D8344B2AF85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_957A6479C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, sidebar_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, title_icon VARCHAR(255) DEFAULT \'NULL\', uri VARCHAR(255) NOT NULL, template VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, featured_image LONGTEXT DEFAULT NULL, status INT NOT NULL, INDEX IDX_23A0E663A432888 (sidebar_id), INDEX IDX_23A0E6612469DE2 (category_id), UNIQUE INDEX UNIQ_23A0E66841CB121 (uri), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_tag (article_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_919694F97294869C (article_id), INDEX IDX_919694F9BAD26311 (tag_id), PRIMARY KEY(article_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type INT NOT NULL, is_root TINYINT(1) NOT NULL, external_id INT DEFAULT NULL, INDEX IDX_64C19C1727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu_node (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, article_id INT DEFAULT NULL, parent_menu_id INT DEFAULT NULL, route_absolute TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, `label` VARCHAR(255) NOT NULL, uri VARCHAR(255) DEFAULT \'NULL\', route VARCHAR(255) DEFAULT \'NULL\', attributes TINYTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', children_attributes TINYTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', link_attributes TINYTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', label_attributes TINYTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', display TINYINT(1) NOT NULL, display_children TINYINT(1) NOT NULL, INDEX IDX_4D30180B727ACA70 (parent_id), INDEX IDX_4D30180B7294869C (article_id), INDEX IDX_4D30180B12469DE2 (category_id), INDEX IDX_4D30180BCCD7E912 (parent_menu_id), UNIQUE INDEX UNIQ_4D30180B5E237E06 (name), UNIQUE INDEX UNIQ_4D30180B841CB121 (uri), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sidebar (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_389B7835E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE widget (id INT AUTO_INCREMENT NOT NULL, sidebar_id INT DEFAULT NULL, article_id INT DEFAULT NULL, extra_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json_array)\', html_content LONGTEXT DEFAULT NULL, sequence INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_85F91ED07294869C (article_id), INDEX IDX_85F91ED02314B8EA (sidebar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E663A432888 FOREIGN KEY (sidebar_id) REFERENCES sidebar (id)');
        $this->addSql('ALTER TABLE article_tag ADD CONSTRAINT FK_919694F97294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article_tag ADD CONSTRAINT FK_919694F9BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1727ACA70 FOREIGN KEY (parent_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE menu_node ADD CONSTRAINT FK_4D30180B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE menu_node ADD CONSTRAINT FK_4D30180B727ACA70 FOREIGN KEY (parent_id) REFERENCES menu_node (id)');
        $this->addSql('ALTER TABLE menu_node ADD CONSTRAINT FK_4D30180B7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE menu_node ADD CONSTRAINT FK_4D30180BBE9F9D54 FOREIGN KEY (parent_menu_id) REFERENCES menu_node (id)');
        $this->addSql('ALTER TABLE widget ADD CONSTRAINT FK_85F91ED03A432888 FOREIGN KEY (sidebar_id) REFERENCES sidebar (id)');
        $this->addSql('ALTER TABLE widget ADD CONSTRAINT FK_85F91ED07294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article_tag DROP FOREIGN KEY FK_919694F97294869C');
        $this->addSql('ALTER TABLE menu_node DROP FOREIGN KEY FK_4D30180B7294869C');
        $this->addSql('ALTER TABLE widget DROP FOREIGN KEY FK_85F91ED07294869C');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1727ACA70');
        $this->addSql('ALTER TABLE menu_node DROP FOREIGN KEY FK_4D30180B12469DE2');
        $this->addSql('ALTER TABLE menu_node DROP FOREIGN KEY FK_4D30180B727ACA70');
        $this->addSql('ALTER TABLE menu_node DROP FOREIGN KEY FK_4D30180BBE9F9D54');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E663A432888');
        $this->addSql('ALTER TABLE widget DROP FOREIGN KEY FK_85F91ED03A432888');
        $this->addSql('ALTER TABLE article_tag DROP FOREIGN KEY FK_919694F9BAD26311');
        $this->addSql('DROP TABLE oauth_token');
        $this->addSql('DROP TABLE fos_user');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_tag');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE menu_node');
        $this->addSql('DROP TABLE sidebar');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE widget');
    }
}
