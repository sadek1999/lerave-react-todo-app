import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import React from "react";

const index = () => {
  return (
    <AuthenticatedLayout
      header={
        <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
         All Tasks
        </h2>
      }
    >
    <Head title="All tasks"></Head>
    </AuthenticatedLayout>
  );
};

export default index;
