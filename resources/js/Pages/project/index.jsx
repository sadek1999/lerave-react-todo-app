import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React from 'react';

const index = ({project}) => {
  console.log(project)
  return (
   <AuthenticatedLayout
   header={
    <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        Projects
    </h2>
}
>
  <Head title='Projects '></Head>


   </AuthenticatedLayout>
  );
};

export default index;
