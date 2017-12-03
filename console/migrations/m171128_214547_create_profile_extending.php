<?php

use yii\db\Migration;

class m171128_214547_create_profile_extending extends Migration
{
    public function safeUp()
    {
        $this->createProfileResume();
        $this->createProfileGraduations();
        $this->createProfileLanguages();
        $this->createProfileLanguagesSkills();
        $this->createProfilePastWork();
        $this->createProfileSkills();
        $this->createLanguages();

        $this->applyData();
    }

    private function applyData()
    {
        $this->db->createCommand("
            INSERT INTO languages (alias, title) VALUES
            ('en', 'Английский'),
            ('ru', 'Русский'),
            ('fr', 'Французский'),
            ('ch', 'Китайскй'),
            ('es', 'Испанский'),
            ('it', 'Итальянский'),
            ('ja', 'Японский'),
            ('pl', 'Польский'),
            ('pt', 'Португальский'),
            ('de', 'Немецкий');

            INSERT INTO profile_languages_skills (language__id, skill_title, skill_level) VALUES
            ((SELECT id FROM languages WHERE alias LIKE 'ru'), 'Начинающий', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'ru'), 'Любитель', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'ru'), 'Профессионал', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'ru'), 'Носитель', 4),
            
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Beginner', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Pre-Intermediate', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Intermediate', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Upper-Intermediate', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Advanced', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'en'), 'Proficiency', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Beginner', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Waystage', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Threshold', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Vantage', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Advanced', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'de'), 'Proficiency', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Débutant (F1)', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Pré-Intermédiaire (F2)', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Intermédiaire (F3)', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Intermédiaire-Supérieur (F4)', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Pré-Avancé (F5) Avancé (F6)', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'fr'), 'Avancé-Supérieur (F7) Supérieur (F8)', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Inicial (Es 1)', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Elemental 2 (Es 2)', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Preintermedio (Es 3)', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Intermedio (Es 4)', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Intermedio-Superior (Es 5)', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Avanzado (Es 6)', 6),
            ((SELECT id FROM languages WHERE alias LIKE 'es'), 'Nivel Superior (Es 7)', 7),
            
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Iniciante', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Básico', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Intermediário', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Usuárioindependente', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Proficiênciaoperativaeficaz', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'pt'), 'Domíniopleno', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Elementare  ', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Pre-intermedio', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Intermedio', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Post-intermedio', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Avanzzato', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'it'), 'Perfettamente', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Podstawowy (A1)', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Podstawowy (A2)', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Progowy (B1)', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Średni Ogólny (B2)', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Zaawansowany (C1)', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'po'), 'Zaawansowany (C2)', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 1 - Kit1 ', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 2 - Kit2', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 3 - Kit3', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 4 - Kit4', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 5 - Kit5', 5),
            ((SELECT id FROM languages WHERE alias LIKE 'ch'), 'HSK 6 - Kit6', 6),
            
            ((SELECT id FROM languages WHERE alias LIKE 'ja'), 'N5', 1),
            ((SELECT id FROM languages WHERE alias LIKE 'ja'), 'N4', 2),
            ((SELECT id FROM languages WHERE alias LIKE 'ja'), 'N3', 3),
            ((SELECT id FROM languages WHERE alias LIKE 'ja'), 'N2', 4),
            ((SELECT id FROM languages WHERE alias LIKE 'ja'), 'N1', 5);
        ")->execute();
    }

    private function cancelData()
    {
        $this->db->createCommand("    
            TRUNCATE TABLE languages; 
            TRUNCATE TABLE profile_languages_skills; 
        ")->execute();
    }

    private function createProfileResume()
    {
        $this->db->createCommand("
            CREATE TABLE profile_resume (
              id int(11) NOT NULL AUTO_INCREMENT,
              user__id int(11) NOT NULL,
              birthday date DEFAULT NULL,
              desired_fee DOUBLE DEFAULT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    private function createProfileGraduations()
    {
        $this->db->createCommand("
            CREATE TABLE profile_resume (
              id int(11) NOT NULL AUTO_INCREMENT,
              user__id int(11) NOT NULL ,
              graduation_title CHAR(255) NOT NULL ,
              place CHAR(255) NOT NULL ,
              qualification CHAR(255) NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ");
    }

    private function createProfileSkills()
    {
        $this->db->createCommand("
            CREATE TABLE profile_skills (
              id int(11) NOT NULL AUTO_INCREMENT,
              user__id int(11) NOT NULL ,
              skill CHAR(100) NOT NULL ,
              level int(2) NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    private function createProfileLanguages()
    {
        $this->db->createCommand("
            CREATE TABLE profile_languages (
              id int(11) NOT NULL AUTO_INCREMENT,
              user__id int(11) NOT NULL,
              language_skill__id int(11),
              desired_fee DOUBLE DEFAULT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    private function createLanguages()
    {
        $this->db->createCommand("
            CREATE TABLE languages (
              id int(11) NOT NULL AUTO_INCREMENT,
              alias CHAR(3) NOT NULL,
              title CHAR(100) NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    private function createProfileLanguagesSkills()
    {
        $this->db->createCommand("
            CREATE TABLE profile_languages_skills (
              id int(11) NOT NULL AUTO_INCREMENT,
              language__id int(11) NOT NULL ,
              skill_title CHAR(100) NULL,
              skill_level INT(10) DEFAULT 0,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    private function createProfilePastWork()
    {
        $this->db->createCommand("
            CREATE TABLE profile_past_work (
              id int(11) NOT NULL AUTO_INCREMENT,
              user__id int(11) DEFAULT NULL,
              birthday date DEFAULT NULL,
              desired_fee DOUBLE DEFAULT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ")->execute();
    }

    public function safeDown()
    {
        $this->cancelData();

        $this->dropTable('profile_resume');
        $this->dropTable('profile_graduations');
        $this->dropTable('profile_skills');
        $this->dropTable('profile_languages');
        $this->dropTable('languages');
        $this->dropTable('profile_languages_skills');
        $this->dropTable('profile_past_work');
        return true;
    }
}
