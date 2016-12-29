<?php
    namespace api\Form\Type;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;

    class MembreType extends AbstractType{

        public function buildForm(FormBuilderInterface $builder, array $options){
            $builder->add('nom', TextareaType::class);
            $builder->add('prenom', TextareaType::class);
            $builder->add('dateNaissance', TextareaType::class);
            $builder->add('adresse', TextareaType::class);
            $builder->add('codePostal', TextareaType::class);
            $builder->add('ville', TextareaType::class);
            $builder->add('niveauEtude', TextareaType::class);
            $builder->add('typeContrat', TextareaType::class);
        }

        public function getName(){
            return 'membre';
        }
    }